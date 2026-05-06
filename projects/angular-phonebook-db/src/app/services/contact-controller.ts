import { Injectable } from '@angular/core';
import { Contact } from '../models/contact';
import { HttpClient } from '@angular/common/http';
import { firstValueFrom, Observable } from 'rxjs';
import { tap } from 'rxjs';

@Injectable({
  providedIn: 'root',
})
export class ContactController {

  protected URI: string = 'https://ca76ec6e708c0d407737.free.beeceptor.com/contacts'

  constructor (private http: HttpClient) {}

  async show(): Promise<Contact[]> {
    const result = await firstValueFrom(this.http.get<Contact[]>(this.URI))
    return result
  }

  public async index(id: number): Promise<Contact> {
    const result = await firstValueFrom(this.http.get<Contact>(this.URI+`/${id}`))
    return result
  }

  // TODO: rest
}
