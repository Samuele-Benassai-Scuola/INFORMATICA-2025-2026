import { Component, Input } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-balance-route-card',
  imports: [RouterLink],
  templateUrl: './balance-route-card.html',
  styleUrl: './balance-route-card.css',
})
export class BalanceRouteCard {
  @Input() id_account!: number;
}
