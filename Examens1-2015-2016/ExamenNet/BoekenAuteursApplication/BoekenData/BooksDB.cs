using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BoekenAuteursData
{
    public static class BooksDB
    {
        public static List<Book> GetBoekenByTitle(string term)
        {
            List<Book> boekenLijst = new List<Book>();

            //TODO: Schrijf hier de nodig code om de boeken uit je database 
            // op te halen waarvan de doorgegeven term in de titel van het boek voorkomt.
            return boekenLijst;
        }  
    }
}
