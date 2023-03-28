// import { HttpClient } from '@angular/common/http';
// import { Injectable } from '@angular/core';
// import { map, ReplaySubject } from 'rxjs';
// import { IResponse } from '../shared/Model/api-response.model';
// // const BaseUrl: string = 'https://p4ssellerservicedev.azurewebsites.net/api/';

// @Injectable({
//   providedIn: 'root',
// })
// export class AuthService {
//   resp: IResponse = {
//     StatusCode: 0,
//     Message: '',
//     Payload: { ResponseMessage: '', ResponseStatus: '' },
//     SentDate: new Date(),
//     isError: false,
//   };
//   private currentUserSource = new ReplaySubject<IResponse>(1);
//   currentUser$ = this.currentUserSource.asObservable();

//   constructor(private httpService: HttpClient) {}

//   login(request: any) {
//     return this.httpService
//       .post<IResponse>(`${BaseUrl}/Login`, request)
//       .pipe(
//         map((response: IResponse) => {
//           if (response.Message.toUpperCase() === 'SUCCESS') {
//             localStorage.setItem('token', response.Payload.ResponseStatus);
//             console.log(response);
//             this.currentUserSource.next(response);
//           }
//         })
//       );
//   }

//   registration(request: any) {
//     return this.httpService.post(`${BaseUrl}/Registration`, request);
//   }

// }