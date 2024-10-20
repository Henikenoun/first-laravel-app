import { BrowserRouter as Router,Route,Routes } from "react-router-dom"
import ListArticle from "./Components/Articles/ListArticle"
import InsertArticle from "./Components/Articles/InsertArticle"
import EditArticle from "./Components/Articles/EditArticle"
import ViewArticle from "./Components/Articles/ViewArticle"

import ListCategorie from "./Components/Categories/ListCategorie"
import InsertCategorie from "./Components/Categories/InsertCategorie"
import EditCategorie from "./Components/Categories/EditCategorie"

import Menu from "./Components/Menu"
import ViewCategorie from "./Components/Categories/ViewCategorie"
import Listscategories from "./Components/Scategories/ListScategories"
import InsertScategories from "./Components/Scategories/InsertScategories"
import EditScategories from "./Components/Scategories/EditScategories"
import Viewscategories from "./Components/Scategories/ViewScategories"



function App() {


  return (
    <>
    <Router>
      <Menu/>
      <Routes>
       
          <Route path="/articles" element={<ListArticle />}> </Route>
          <Route path="/articles/add" element={<InsertArticle/>}></Route>
          <Route path="/articles/edit/:id" element={<EditArticle/>}></Route>
          <Route path="/articles/view/:id" element={<ViewArticle/>}></Route> 

          <Route path="/categories" element={<ListCategorie />}> </Route>
          <Route path="/categories/add" element={<InsertCategorie/>}></Route>
          <Route path="/categories/edit/:id" element={<EditCategorie/>}></Route>
          <Route path="/categories/view/:id" element={<ViewCategorie/>}></Route>  

          <Route path="/scategories" element={<Listscategories />}> </Route>
          <Route path="/scategories/add" element={<InsertScategories/>}></Route>
          <Route path="/scategories/edit/:id" element={<EditScategories/>}></Route>
          <Route path="/scategories/view/:id" element={<Viewscategories/>}></Route>
      </Routes>
     
    </Router>
   {/* <h1>Bienvenue dans notre site </h1> */}

    </>
  )
}

export default App
