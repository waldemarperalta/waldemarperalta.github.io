Parse.initialize("XW1a2nBTwfe9hG5XtNkosbm8vYecZsXlWAIeB1Xf","li6gn8JJj5rHFhShRZ2zBx2IssqCVdOpwcT8awyc"); 
Parse.serverURL = "https://parseapi.back4app.com/";

console.log("app inicializado");

Parse.User.enableUnsafeCurrentUser();

var currentUser = Parse.User.current();
if (currentUser) {
  user = new Parse.User();
  console.log('::::::::::currentuser', user.get('username'));
    // do stuff with the user
} else {
    // show the signup or login page
    console.log('no usr');
}