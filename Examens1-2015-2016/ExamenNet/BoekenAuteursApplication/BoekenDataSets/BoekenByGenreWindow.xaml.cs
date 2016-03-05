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
using System.Windows.Shapes;

namespace BoekenAuteursDataSets
{
    /// <summary>
    /// Interaction logic for BoekenByGenre.xaml
    /// </summary>
    public partial class BoekenByGenreWindow : Window
    {
        // TODO: Declareer hier de nodige variabelen 
        
        public BoekenByGenreWindow()
        {
            InitializeComponent();
            
        }

        private void Window_Loaded(object sender, RoutedEventArgs e)
        {
            //TODO: Voeg hier je code toe om dmv je dataset je Genres data te laden

            BoekenAuteursDataSets.BoekenDBDataSet boekenDBDataSet = ((BoekenAuteursDataSets.BoekenDBDataSet)(this.FindResource("boekenDBDataSet")));
            // Load data into the table Books. You can modify this code as needed.
            BoekenAuteursDataSets.BoekenDBDataSetTableAdapters.BooksTableAdapter boekenDBDataSetBooksTableAdapter = new BoekenAuteursDataSets.BoekenDBDataSetTableAdapters.BooksTableAdapter();
            boekenDBDataSetBooksTableAdapter.Fill(boekenDBDataSet.Books);
            System.Windows.Data.CollectionViewSource booksViewSource = ((System.Windows.Data.CollectionViewSource)(this.FindResource("booksViewSource")));
            booksViewSource.View.MoveCurrentToFirst();
        }

        private void genreComboBox_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            //TODO: Voeg hier de code toe om de boeken van een specifiek genre te laden dmv van het DataSet'            
        }

    }
}
