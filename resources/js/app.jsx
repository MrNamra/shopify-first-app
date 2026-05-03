import './bootstrap';
import React from 'react';
import { createRoot } from 'react-dom/client';
import Dashboard from './components/Dashboard';

// Find the element with id="app" in your Blade file
const rootElement = document.getElementById('app');

if (rootElement) {
    const root = createRoot(rootElement);

    // You can pass data from Blade to React using data-attributes
    const shopDomain = rootElement.getAttribute('data-shop');

    root.render(<Dashboard shopDomain={shopDomain} />);
}
