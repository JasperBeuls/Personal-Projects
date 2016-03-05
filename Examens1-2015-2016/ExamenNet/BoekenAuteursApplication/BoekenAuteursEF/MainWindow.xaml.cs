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

namespace BoekenAuteursEF
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        // TODO: Gebruik je Entity Data Model om al de auteurs te tonen in de auteurComboBox
        public MainWindow()
        {
            InitializeComponent();
            
        }

        private void auteurComboBox_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            // TODO: zorg dat alle boeken van de gekozen auteur
            // worden opgehaald en getoond in de boekenDataGrid 
            // wanneer een nieuwe auteur uit de combobox 
            // wordt geselecteerd
        }

        private void toonAuteurInfoButton_Click(object sender, RoutedEventArgs e)
        {
            // TODO: Navigeer naar het AuteurInfoWindow wanneer er op de
            // "Meer info over auteur"-button wordt geklikt.
            // Zorg dat de auteur waarop je hebt geklikt mee wordt
            // doorgegeven aan dit window.

            
        }
    }
}
