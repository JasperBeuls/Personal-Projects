using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace TempRange
{
    public class Meting
    {
        public DateTime  Datum { get; set; }
        public int Temperatuur { get; set; }

        public Meting(int temp)
        {
            
        }
    }

    public class Metingen
    {
        
        List<Meting> group;
        

        public Metingen( int ondergrens, int bovengrens, int range)
        {
            
        }

        
    }
}
