import { Component, Input } from '@angular/core';
import { RouterLink } from "@angular/router";

@Component({
  selector: 'app-transaction-maker-card',
  imports: [RouterLink],
  templateUrl: './transaction-maker-card.html',
  styleUrl: './transaction-maker-card.css',
})
export class TransactionMakerCard {
  @Input() id_account!: number
}
