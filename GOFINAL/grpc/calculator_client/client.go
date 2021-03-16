package main

import (
	"EndkaGo/shoppb"
	"context"
	"fmt"
	"google.golang.org/grpc"
	"io"
	"log"
)

func getProducts(c shoppb.CalculatorServiceClient) {
	ctx := context.Background()
	req := &shoppb.NumberRequest{
		Number: 120,
	}

	stream, err := c.GetProducts(ctx, req)
	if err != nil {
		log.Fatalf("error while calling GreetManyTimes RPC %v", err)
	}
	defer stream.CloseSend()

LOOP:
	for {
		res, err := stream.Recv()
		if err != nil {
			if err == io.EOF {
				// we've reached the end of the stream
				break LOOP
			}
			log.Fatalf("error while reciving from PrimeComposition RPC %v", err)
		}
		log.Printf("response from GreetManyTimes:%v \n", res.GetResult())
	}

}

func main() {
	fmt.Println("Hi baby im u client")

	conn, err := grpc.Dial("localhost:6666", grpc.WithInsecure())
	if err != nil {
		log.Fatalf(" cant connect to 6666: %v", err)
	}
	defer conn.Close()

	c := shoppb.NewCalculatorServiceClient(conn)
	getProducts(c)
}
