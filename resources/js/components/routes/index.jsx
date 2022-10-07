import React from "react";
import {
    Routes, Route, BrowserRouter
} from "react-router-dom";

import Home from "../pages/Home";

export default function RoutePath(){
    return(
        <BrowserRouter>
            <Routes>
                <Route exact path='/' element={<Home />}/>
            </Routes>
        </BrowserRouter>
    )
}

