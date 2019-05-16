import React, { Component } from "react";
import { Link } from "react-router-dom";

class Nav extends Component {
  constructor(props) {
    super(props);
    this.state = {
      isOpened: false
    };
  }

  handleClick = () => {
    this.setState(prevState => {
      return {
        isOpened: !prevState.isOpened
      };
    });
  }

  render() {
    let openHamburgerMenu = this.state.isOpened === true ? "nav-links open" : "nav-links";
    let fadeNavLi = this.state.isOpened === true ? "show" : "";
    return (
      <nav>
        <div className="hamburger" onClick={this.handleClick}>
          <div className="line" />
          <div className="line" />
          <div className="line" />
        </div>
        <img
          className="img-octocat ml-5 mt-sm-3"
          src="images/Octocat.png"
          alt="Octocat git"
        />
        <ul className={openHamburgerMenu}>
          <Link to="/">
            <li onClick={this.handleClick} className={fadeNavLi}>
              About
            </li>
          </Link>
          <Link to="/projects">
            <li onClick={this.handleClick} className={fadeNavLi}>
              Projets
            </li>
          </Link>
          <Link to="/content">
            <li onClick={this.handleClick} className={fadeNavLi}>
              Content
            </li>
          </Link>
          <Link to="/contact">
            <li onClick={this.handleClick} className={fadeNavLi}>
              Contact
            </li>
          </Link>
        </ul>
      </nav>
    );
  }
}

export default Nav;
