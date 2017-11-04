import { Component } from '@angular/core';
import { NavController, AlertController, ActionSheetController } from 'ionic-angular';

import { AngularFireDatabase, FirebaseListObservable } from 'angularfire2/database';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})

export class HomePage {
  entries: FirebaseListObservable<any>;

  constructor(public navCtrl: NavController, public alertCtrl: AlertController,  db : AngularFireDatabase, public actionSheetCtrl: ActionSheetController) {
      this.entries = db.list('/entries');
  }

  addEntry(){
      let prompt = this.alertCtrl.create({
          title:'Entry Name',
          message: 'Enter your name.',
          inputs: [
              {
                  name: 'title',
                  placeholder: 'Title'
              },
          ],
          buttons: [
              {
                  text: 'Cancel',
                  handler : data => {
                      console.log('Cancel clicked');
                  }
              },
              {
                  text: 'Save',
                  handler : data => {
                      this.entries.push({
                          title: data.title
                      });
                  }
              }
          ]
      });
      prompt.present();
  }

  showOptions(entryId, entryTitle){
      let actionSheet = this.actionSheetCtrl.create({
          title: 'What do you want to do?',
          buttons: [
              {
                  text: 'Delete entry',
                  role: 'destructive',
                  handler: () => {
                      this.removeEntry(entryId);
                  }
              },{
                  text: 'Update entry',
                  handler: () => {
                      this.updateEntry(entryId, entryTitle);
                  }
              },{
                  text: 'Cancel',
                  role: 'cancel',
                  handler: () => {
                      console.log('Cancel clicked');
                  }
              }
          ]
      });
      actionSheet.present();
  }

  removeEntry(entryId: string){
      this.entries.remove(entryId);
  }

  updateEntry(entryId, entryTitle){
      let prompt = this.alertCtrl.create({
          title: 'Entry Name',
          message: "Update the name for this entry.",
          inputs: [
              {
                  name: 'title',
                  placeholder: 'Title',
                  value: entryTitle
              },
          ],
          buttons: [
              {
                  text: 'Cancel',
                  handler: data => {
                      console.log('Cancel clicked');
                  }
              },
              {
                  text: 'Save',
                  handler: data => {
                      this.entries.update(entryId, {
                          title: data.title
                      });
                  }
              }
          ]
      });
      prompt.present();
  }
}
