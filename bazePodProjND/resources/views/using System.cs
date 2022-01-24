using System;
using System.Collections.Generic;
using System.Text;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace Vjezba1
{
    public partial class Kalkulator : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
           
            StringBuilder table = new StringBuilder();


            table.Append("<table style=border='1' >");
            
            table.Append("<table style=border='1' >");
            table.Append("</table>");

            for (int i = 1; i <= 10; i++)
            {
                table.Append("<td>");
                for (int j = 1; j <= 10; j++)
                {
                    
                    table.Append("<td> a </td>");
                    
                }
                table.Append("</td>");
            }

            table.Append("</table>");

            PlaceHolder1.Controls.Add(new Literal { Text = table.ToString() });

            }
        









    }
}