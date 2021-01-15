import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { HomeComponent } from './home/home.component';
import { ClientsComponent } from './clients/clients.component';
import { ClientsFormComponent } from './clients-form/clients-form.component';
import { ProductsComponent } from './products/products.component';
import { ProductsFormComponent } from './products-form/products-form.component';
import { ChartsModule } from 'ng2-charts';

const routes: Routes = [
  { path: 'clientes', component: ClientsComponent },
  { path: 'addcliente', component: ClientsFormComponent },
  { path: 'produtos', component: ProductsComponent },
  { path: 'addprodutos', component: ProductsFormComponent },
  { path: '', component: HomeComponent } 
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes),
    ChartsModule
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
