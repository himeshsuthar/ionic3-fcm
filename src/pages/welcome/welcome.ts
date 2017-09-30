import { Component } from '@angular/core';
import { IonicPage, NavController } from 'ionic-angular';
import {RegtokenProvider} from '../../providers/regtoken/regtoken';
/**
 * The Welcome Page is a splash page that quickly describes the app,
 * and then directs the user to create an account or log in.
 * If you'd like to immediately put the user onto a login/signup page,
 * we recommend not using the Welcome page.
*/
@IonicPage()
@Component({
  selector: 'page-welcome',
  templateUrl: 'welcome.html'
})
export class WelcomePage {
data;
  constructor(public navCtrl: NavController, private regProvide:RegtokenProvider) {
    this.data = {};
  }

  login() {
    this.navCtrl.push('LoginPage');
  }

  sendMessage(title) {
    this.regProvide.sendMessage(title)
    .then(data=>this.data={},error=>console.log(error))
  }

  }

