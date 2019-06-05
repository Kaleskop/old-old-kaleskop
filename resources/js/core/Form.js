import FormErrors from "./FormErrors";

class Form {

 /**
  * Create a new Form instance.
  *
  * @param {object} data
  */
 constructor(data) {
  this.originalData = data;

  for (let field in data) {
   this[field] = data[field];
  }

  this.errors = new FormErrors();
 }
}
