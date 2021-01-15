import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-doughnutchart',
  templateUrl: './doughnutchart.component.html',
  styleUrls: ['./doughnutchart.component.css']
})
export class DoughnutchartComponent implements OnInit {

  public doughnutChartLabels = ['Clientes', 'Produtos'];  
  public doughnutChartData = [120, 150];  
  public doughnutChartType = 'doughnut';

  constructor() { }

  ngOnInit() {
  }

}
