﻿#pragma checksum "..\..\BoekenByGenre.xaml" "{406ea660-64cf-4c82-b6f0-42d48172a799}" "72609176E9192E99490D41EBDB431EE4"
//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated by a tool.
//     Runtime Version:4.0.30319.42000
//
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

using BoekenAuteursDataSets;
using System;
using System.Diagnostics;
using System.Windows;
using System.Windows.Automation;
using System.Windows.Controls;
using System.Windows.Controls.Primitives;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Ink;
using System.Windows.Input;
using System.Windows.Markup;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Media.Effects;
using System.Windows.Media.Imaging;
using System.Windows.Media.Media3D;
using System.Windows.Media.TextFormatting;
using System.Windows.Navigation;
using System.Windows.Shapes;
using System.Windows.Shell;


namespace BoekenAuteursDataSets {
    
    
    /// <summary>
    /// BoekenByGenre
    /// </summary>
    public partial class BoekenByGenre : System.Windows.Window, System.Windows.Markup.IComponentConnector {
        
        
        #line 19 "..\..\BoekenByGenre.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.Grid grid1;
        
        #line default
        #line hidden
        
        
        #line 28 "..\..\BoekenByGenre.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.ComboBox genreComboBox;
        
        #line default
        #line hidden
        
        
        #line 36 "..\..\BoekenByGenre.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.DataGrid boekenDataGrid;
        
        #line default
        #line hidden
        
        
        #line 38 "..\..\BoekenByGenre.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.DataGridTextColumn iSBNColumn;
        
        #line default
        #line hidden
        
        
        #line 39 "..\..\BoekenByGenre.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.DataGridTextColumn titelColumn;
        
        #line default
        #line hidden
        
        
        #line 40 "..\..\BoekenByGenre.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.DataGridTextColumn auteurAchternaamColumn;
        
        #line default
        #line hidden
        
        
        #line 41 "..\..\BoekenByGenre.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.DataGridTextColumn paginasColumn;
        
        #line default
        #line hidden
        
        
        #line 42 "..\..\BoekenByGenre.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.DataGridTextColumn genreColumn;
        
        #line default
        #line hidden
        
        private bool _contentLoaded;
        
        /// <summary>
        /// InitializeComponent
        /// </summary>
        [System.Diagnostics.DebuggerNonUserCodeAttribute()]
        [System.CodeDom.Compiler.GeneratedCodeAttribute("PresentationBuildTasks", "4.0.0.0")]
        public void InitializeComponent() {
            if (_contentLoaded) {
                return;
            }
            _contentLoaded = true;
            System.Uri resourceLocater = new System.Uri("/BoekenDataSets;component/boekenbygenre.xaml", System.UriKind.Relative);
            
            #line 1 "..\..\BoekenByGenre.xaml"
            System.Windows.Application.LoadComponent(this, resourceLocater);
            
            #line default
            #line hidden
        }
        
        [System.Diagnostics.DebuggerNonUserCodeAttribute()]
        [System.CodeDom.Compiler.GeneratedCodeAttribute("PresentationBuildTasks", "4.0.0.0")]
        [System.ComponentModel.EditorBrowsableAttribute(System.ComponentModel.EditorBrowsableState.Never)]
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Design", "CA1033:InterfaceMethodsShouldBeCallableByChildTypes")]
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Maintainability", "CA1502:AvoidExcessiveComplexity")]
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1800:DoNotCastUnnecessarily")]
        void System.Windows.Markup.IComponentConnector.Connect(int connectionId, object target) {
            switch (connectionId)
            {
            case 1:
            
            #line 8 "..\..\BoekenByGenre.xaml"
            ((BoekenAuteursDataSets.BoekenByGenre)(target)).Loaded += new System.Windows.RoutedEventHandler(this.Window_Loaded);
            
            #line default
            #line hidden
            return;
            case 2:
            this.grid1 = ((System.Windows.Controls.Grid)(target));
            return;
            case 3:
            this.genreComboBox = ((System.Windows.Controls.ComboBox)(target));
            
            #line 28 "..\..\BoekenByGenre.xaml"
            this.genreComboBox.SelectionChanged += new System.Windows.Controls.SelectionChangedEventHandler(this.genreComboBox_SelectionChanged);
            
            #line default
            #line hidden
            return;
            case 4:
            this.boekenDataGrid = ((System.Windows.Controls.DataGrid)(target));
            return;
            case 5:
            this.iSBNColumn = ((System.Windows.Controls.DataGridTextColumn)(target));
            return;
            case 6:
            this.titelColumn = ((System.Windows.Controls.DataGridTextColumn)(target));
            return;
            case 7:
            this.auteurAchternaamColumn = ((System.Windows.Controls.DataGridTextColumn)(target));
            return;
            case 8:
            this.paginasColumn = ((System.Windows.Controls.DataGridTextColumn)(target));
            return;
            case 9:
            this.genreColumn = ((System.Windows.Controls.DataGridTextColumn)(target));
            return;
            }
            this._contentLoaded = true;
        }
    }
}

