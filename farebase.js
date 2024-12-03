import { initializeApp } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-analytics.js";
import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword, signOut } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-auth.js";
import { doc, setDoc,getFirestore } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-firestore.js";


const firebaseConfig = {
  apiKey: "AIzaSyArAosbnSgSQtAENBVgvvY0fnCrU5vk54s",
  authDomain: "fir-aut-5b4e8.firebaseapp.com",
  projectId: "fir-aut-5b4e8",
  storageBucket: "fir-aut-5b4e8.appspot.com",
  messagingSenderId: "980603892053",
  appId: "1:980603892053:web:822f7660fc633a2ce03fdc",
  measurementId: "G-7PEQHRQF21"
};

const app = initializeApp(firebaseConfig);
const auth = getAuth();
const firestore = getFirestore(app);

export class ManageAccount {
  async register(email, password) {
    try {
      await createUserWithEmailAndPassword(auth, email, password);
      
      alert("Registro exitoso. Serás redirigido a la página de inicio de sesión.");
      window.location.href = "paginainiciodesesion.html";
    } catch (error) {
      console.error(error.message);
      
      alert("Error al registrar: " + error.message);
    }
  }

  async authenticate(email, password) {
      const credenciales = await signInWithEmailAndPassword(auth, email, password);
      console.log("Inicio de sesión exitoso:", credenciales);
      
       

      const uid = credenciales.user.uid;

      
      
      const nuevoDocRef = doc(firestore, 'usuarios', uid );
      const datos = {
        email: email,
        ID:uid,
      };
      
    

     

      await setDoc(nuevoDocRef, datos);
      console.log("Datos guardados correctamente:", nuevoDocRef.id);
  
      localStorage.setItem('userID', uid);
      window.location.href = "inicio.html"

      
        
    
    }

    
  


  
  signOut() {
    signOut(auth)
      .then((_) => {
        window.location.href = "paginainiciodesesion.html";
      })
      .catch((error) => {
        console.error(error.message);
      });
  }
}

