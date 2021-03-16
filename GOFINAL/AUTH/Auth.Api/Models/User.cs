using SimpleProjectSE2.Dtos;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace SimpleProjectSE2.Models
{
    public class User
    {
        public User()
        {

        }

        public User(UserDto s) 
        {
            Id = Guid.NewGuid();
            Name = s.Name;
        }
        public Guid Id { get; set; }
        public string Name { get; set; }
        public string Username { get; set; }
        public byte[] PasswordHash { get; set; }
        public byte[] PasswordSalt { get; set; }
        public string Role { get; set; }
    }
}
