import React from 'react';

const Dashboard = ({ shopDomain }) => {

    const showToast = () => {
        // THE NEW TRICK: Use the global shopify object directly!
        shopify.toast.show('This is the modern way!', { duration: 2000 });
    };
    return (
        <div style={{ padding: '40px', textAlign: 'center' }}>
            <h1>Modern React Dashboard</h1>
            <p>Managing: {shopDomain}</p>

            <button
                onClick={showToast}
                style={{ padding: '10px 20px', cursor: 'pointer' }}
            >
                Show Modern Toast
            </button>
        </div>
    );
};
export default Dashboard;

