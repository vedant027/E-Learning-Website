const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
const signUpButton_mobile = document.getElementById('signUp_mobile');
const signInButton_mobile = document.getElementById('signIn_mobile');


signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

signUpButton_mobile.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton_mobile.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});


// Setting up firebase with our Website
const firebaseApp = firebase.initializeApp({ 
  apiKey: "AIzaSyC-9D8Xtwl68RSjiAWJIYrYbAfVtxXugdc",
  authDomain: "edu-elex.firebaseapp.com",
  projectId: "edu-elex",
  storageBucket: "edu-elex.appspot.com",
  messagingSenderId: "82544755841",
  appId: "1:82544755841:web:6555d8245292d5eb4ef980",
  measurementId: "G-NH140LJ16J"
 });
const db = firebaseApp.firestore();
const auth = firebaseApp.auth();



// SignUp Function
const signUp=()=>{
	const name = document.getElementById("name").value;
	const email = document.getElementById("email").value;
	const password = document.getElementById("password").value;
	console.log(name,email,password);
	// Firebase Code
	firebase.auth().createUserWithEmailAndPassword(email,password)
	.then((result) => {
	  // Signed Up 
	  window.location.assign("login.html")
	  alert("Registration Successful !! Please Login ");
	//   document.write("You are Signed Up")
	//   console.log(result)
	})
	.catch((error) => {
	  console.log(error.code);
	  console.log(error.message)
	});
}


// SignIn Function
const signIn=()=>{
	const email = document.getElementById("email-signIn").value;
	const password = document.getElementById("password-signIn").value;
	console.log(email,password);
	// Firebase Code
   firebase.auth().signInWithEmailAndPassword(email,password)
  .then((result) => {
    // Signed in
	window.location.assign("index.html");
	alert("Login Successfully");
    // document.write("You are Signed In")
	// console.log(result)
  })
  .catch((error) => {
    console.log(error.code);
	console.log(error.message)
  });

}

// // Linking Faculty Login button to login panel
// function facultyLogin() {
// 	window.location.href = 'attendance-html/index.html';
// } 