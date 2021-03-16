using SimpleProjectSE2.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace SimpleProjectSE2.Repositories.Interfaces
{
    public interface IAuthRepository
    {
        User Register(User student, string password);
        User Login(string username, string password);
        bool UserExists(string username);
    }
}
