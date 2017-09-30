import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';
import "rxjs/Rx";
import { Observable } from "rxjs";

/*
  Generated class for the RegtokenProvider provider.

  See https://angular.io/guide/dependency-injection for more info on providers
  and Angular DI.
*/
@Injectable()
export class RegtokenProvider {

  constructor(public http: Http) {
    console.log('Hello RegtokenProvider Provider');
  }
  regToken(data): Promise<any> {

    return this.http.post("http://132.140.160.114/ionic-3/fcmIonicDemo/server/regToken.php", data).toPromise();
  }
  sendMessage(data): Promise<any> {
            return this.http.post("http://132.140.160.114/ionic-3/fcmIonicDemo/server/sendMessage.php",data).toPromise();
      }
}
