import { Injectable } from '@angular/core';

import { Product } from 'src/app/models/product'

@Injectable({
  providedIn: 'root'
})
export class ProductService {

  products: Product[] = [
    new Product(1, 'Product 1', 'SNOWFLAKE FLOWER MIRACLE PLATE DIAMOND RING', 24226,'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS8n2IGCcuM5c6HN0MAHQcviqJVlu36yBSuuPAVkNpmdJGlLNmAtFXHyRxapPrMN5E_6CwokCNh&usqp=CAc'),
    new Product(2, 'Product 2', 'LITTLE BOWS CASUAL DIAMOND RING', 19852,'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQBayvb7zz6tfJ3OHzfE1fauhfOABRnXtH3eOgef_9zWZggqing9w9fQqMD307M1wpFvlh1_ZY&usqp=CAc'),
    new Product(3, 'Product 3', 'DINKY DARLING DIAMOND RING', 9418,'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRcPsnV_JgGxM2HjXxaAcWyCS2GcZAYVOUkrO7xJxJFM9QQVPTpIWQ8JIJfTVncRVFatj1ek4A&usqp=CAc'),
    new Product(4, 'Product 4', 'YELLOW CHIMES QUEEN CROWN', 22500,'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRVCA83vWjjkExS4pMYtTBeuQQYZ70R9T1sgXhQDIk6yFXUJKpir6dRClOq7rgPRPaNxxbN53w&usqp=CAc'),
    new Product(5, 'Product 5', 'THE SERENITY RING', 24730,'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT47Jg2Y64UNBbXEDo166Io5lag0Bjl3XZupOl3jzC92MwImt1oY6RdDh__Cvl24FS6DJlI4wPa&usqp=CAc'),
    new Product(6, 'Product 6', 'ORCHID BUTTERFLY DIAMOND RING', 29540,'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTgNRkzSKgJG_3vD_6domyMVpZi8dS3kDRTYjmAyYr49_1XgZ5nH7HVg0xZBYBDyaPoSH1gZQ8&usqp=CAc'),
    new Product(7, 'Product 7', 'LOVE VOWS DIAMOND RING', 19076,'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTVomnFPcqG2vD6VRv3-J12_rPVQ3QQ1Kz-q_uUjy2V-e4H3hmhOOmildZ5YmO0MGus9q4-ECw&usqp=CAc'),
    new Product(8, 'Product 8', 'JACKLEEN STACKABLE DIAMOND RING', 42096,'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSf038GTStl8qKtumvTV-C3j-jgbnDdAxMPZ09bxSl048mOiBKj24qLyqfrrv6YL7UoTpqIjEMZ&usqp=CAc'),
    new Product(9, 'Product 9', 'POSY DIAMOND RING', 9880,'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSaL6vGClG-3YEMFSSiE2TNPUX1-ltJXxs9fPxgkqEaa7aioIG2Trf4R4jUhacpR3dPwpLFrELG&usqp=CAc'),
  
  ]

  constructor() { }

  getProducts(): Product[] {
    //TODO: Populate products from an API and return an Observable
    return this.products
  }
}
