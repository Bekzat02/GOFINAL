package main

import (
	"EndkaGo/shoppb"
	"fmt"
	"google.golang.org/grpc"
	"log"
	"net"
	"time"
)

//

type Server struct {
	shoppb.UnimplementedCalculatorServiceServer
}

/*func FindById(id int) {

}*/

func (s *Server) getProducts(req *shoppb.NumberRequest, stream shoppb.CalculatorService_GetProductsServer) error {
	fmt.Printf("GreetManyTimes function was invoked with %v \n", req)
	number := req.GetNumber()
	/*n := int(number)
	arr := FindById(n)*/
		res := &shoppb.ProductsResponse{Result: fmt.Sprintf("Baby : %v\n",number)}
		if err := stream.Send(res); err != nil {
			log.Fatalf("error while sending primeNumberServer many times responses: %v", err.Error())
		}
		time.Sleep(time.Second)
	return nil
}

func main() {
	l, err := net.Listen("tcp", ":6666")
	if err != nil {
		log.Fatalf("Failed to listen:%v", err)
	}
	s := grpc.NewServer()
	shoppb.RegisterCalculatorServiceServer(s, &Server{})
	log.Println("Server is running on port:6666")
	if err := s.Serve(l); err != nil {
		log.Fatalf("failed to serve:%v", err)
	}
}
