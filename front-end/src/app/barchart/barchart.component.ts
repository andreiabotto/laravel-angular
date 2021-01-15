import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-barchart',
  templateUrl: './barchart.component.html',
  styleUrls: ['./barchart.component.css']
})
export class BarchartComponent implements OnInit {

  constructor() { }
  
  public barChartOptions = {
    scaleShowVerticalLines: false,
    responsive: true
  };
  
  public barChartLabels = ['2021'];
  
  public barChartType = 'bar';
  
  public barChartLegend = true;
  
  public barChartData = [
    { data: [65], label: 'Produtos' },
    { data: [28], label: 'Clientes' }
  ];

  ngOnInit() {}

}
