import React from "react";
import { Link } from "react-router-dom";

import WIPIcon from "../../assets/WIP.webp";
import "./Dashboard.css";

const Dashboard = () => {
  return (
    <div className="dashboard">
      <h1>Work In Progress</h1>
      <img src={WIPIcon} alt="Work In Progress" />
      <Link to={"/"}>Back to home</Link>
    </div>
  );
};

export default Dashboard;
