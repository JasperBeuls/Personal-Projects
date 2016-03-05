using BoekenAuteursData;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace BoekenAuteurs3LagenModel
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        private void zoekButton_Click(object sender, RoutedEventArgs e)
        {
            //TODO: voeg hier de code aan om de boeken op te halen
            // waarin de ingegeven term voorkomt  (gebruik hiervoor je database class(es))
            // en deze te tonen in de DataGrid.
            
          
            

        }

        
        private void moreInfoButton_Click(object sender, RoutedEventArgs e)
        {
            // TODO: voeg hier je code toe om het geselecteerde boek uit je datagrid
            // door te geven aan het MoreBoekInfoWindow
           

        }
    }
}
