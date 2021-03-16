using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace SimpleProjectSE2.Dtos
{
    public class UserRegisterDto
    {
        public string Name { get; set; }
        [Required]
        public string Username { get; set; }
        [Required]
        [StringLength(13, MinimumLength = 6, ErrorMessage = "Password length must be between 6 and 13")]
        public string Password { get; set; }
    }
}
