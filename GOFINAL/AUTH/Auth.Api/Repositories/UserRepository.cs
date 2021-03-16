using Microsoft.EntityFrameworkCore;
using SimpleProjectSE2.Data;
using SimpleProjectSE2.Models;
using SimpleProjectSE2.Repositories.Interfaces;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace SimpleProjectSE2.Repositories
{
    public class UserRepository : IUserRepository
    {
        private readonly DataContext _dataContext;

        public UserRepository(DataContext dataContext)
        {
            _dataContext = dataContext;
        }

        public async Task<IEnumerable<User>> GetAllUsers()
        {
            var allUsers = await _dataContext.UsersList.ToListAsync();
            
            return allUsers;
        }
    }
}
