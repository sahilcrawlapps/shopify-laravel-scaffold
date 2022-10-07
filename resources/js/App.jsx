import RoutePath from "./components/routes";

import React from 'react';
import ReactDOM from 'react-dom';
import { AppProvider } from "@shopify/polaris";
import en from '@shopify/polaris/locales/en.json';
import { Provider } from '@shopify/app-bridge-react';
const config = window.shopify_app_bridge_config;
import '@shopify/polaris/build/esm/styles.css'

export default function App() {
    return (
        <div className="App">
            <RoutePath />
        </div>
    );
}

if (document.getElementById('app')) {


    ReactDOM.render(
        <Provider
            config={config}
        >
            <AppProvider i18n={en} theme={{ colorScheme: "light" }}>
                <App />
            </AppProvider>
        </Provider>,
        document.getElementById("app"));
}
