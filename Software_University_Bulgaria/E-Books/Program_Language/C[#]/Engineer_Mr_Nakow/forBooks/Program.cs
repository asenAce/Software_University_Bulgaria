﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace forBooks
{
    class Program
    {
        static void Main(string[] args)
        {





        }

        public static PrintTotalAmountForBooks(decimal[] prices)

        decimal totalAmount = 0;
        foreach ( decimal singleBookPrice in prices )
    {
        totalAmount = totalAmount + singleBookPrice;

    }
    Console.WriteLine("The total amount of all books is:  " + totalAmount);


    }
}
