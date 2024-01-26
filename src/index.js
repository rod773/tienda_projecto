import React from "react";
import ReactDOM from "react-dom/client";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import "./index.scss";

import "bootstrap/dist/js/bootstrap.bundle";
import Layout from "./pages/Layout/Layout";
import Home from "./pages/Home/Home";
import Blogs from "./pages/Blogs/Blogs";
import Contact from "./pages/Contact/Contact";
import NoPage from "./pages/NoPage/NoPage";

export default function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Layout />}>
          <Route index element={<Home />} />
          <Route path="blogs" element={<Blogs />} />
          <Route path="contact" element={<Contact />} />
          <Route path="*" element={<NoPage />} />
        </Route>
      </Routes>
    </BrowserRouter>
  );
}

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<App />);
