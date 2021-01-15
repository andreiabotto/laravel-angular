import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from './home/home.component';
import { NavbarComponent } from './navbar/navbar.component';
import { ClientsComponent } from './clients/clients.component';
import { ClientsFormComponent } from './clients-form/clients-form.component';
import { ProductsComponent } from './products/products.component';
import { ProductsFormComponent } from './products-form/products-form.component';
import { BarchartComponent } from './barchart/barchart.component';

import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import {LayoutModule} from '@angular/cdk/layout';
import {MatToolbarModule} from '@angular/material/toolbar';
import {MatButtonModule} from '@angular/material';
import {MatCardModule} from '@angular/material/card';
import { ChartsModule, ThemeService  } from 'ng2-charts';
import { DoughnutchartComponent } from './doughnutchart/doughnutchart.component';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    NavbarComponent,
    ClientsComponent,
    ClientsFormComponent,
    ProductsComponent,
    ProductsFormComponent,
    BarchartComponent,
    DoughnutchartComponent       
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    BrowserAnimationsModule, 
    LayoutModule,   
    MatToolbarModule,
    MatButtonModule,
    MatCardModule,
    ChartsModule,
  ],
  providers: [
    ThemeService 
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
