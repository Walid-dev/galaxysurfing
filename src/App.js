import React from "react";
import "./App.css";
import Acceuil from "./Acceuil";
import Projects from "./Projects";
import Content from "./Content";
import Contact from "./Contact";
import Nav from "./Nav";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";

function App() {
  return (
    <Router>
      <div className="App">
        <Nav />
        <Switch>
          <Route path="/" exact component={Acceuil} />
          <Route path="/projects" component={Projects} />
          <Route path="/content" component={Content} />
          <Route path="/contact" component={Contact} />
        </Switch>
      </div>
    </Router>
  );
}

export default App;
