import React from 'react';

const Dashboard = ({ shopDomain }) => {

    const [loading, setLoading] = React.useState(false);
    const showToast = () => {
        setLoading(true);
        setTimeout(() => {
            setLoading(false);
        }, 2000);
    };
    return (
        <s-page
            title="Dashboard"
            subtitle="Manage app settings"
        >
            <s-layout>
                <s-button
                    variant="auto"
                    onClick={showToast}
                    // loading={loading}
                    icon="upload"
                    tone="critical"
                    command="--toggle"
                >
                    Save Changes
                </s-button>
                <s-block-stack gap="400">
                    <s-card title="App Status" sectioned>
                        <s-block-stack gap="400">
                            <s-text as="p" variant="bodyMd">
                                Your Domain is: {shopDomain}
                            </s-text>
                        </s-block-stack>
                        <s-block-stack gap="400">
                            <s-text as="p" variant="bodyMd" tone="subdued">
                                All components here are using <strong>Shopify Polaris</strong> for that
                                native "built-in" look and feel.
                            </s-text>
                        </s-block-stack>
                    </s-card>
                </s-block-stack>
                <s-layout-section variant="oneThird">
                    <s-card title="Quick Actions" sectioned>
                        <s-button onClick={() => window.open('https://polaris.shopify.com')}>
                            View Polaris Docs
                        </s-button>
                    </s-card>
                </s-layout-section>
            </s-layout>
        </s-page>
    );
};
export default Dashboard;

