import React from 'react'
import {Page, Card} from '@shopify/polaris';

function Home() {
    return (
        <div>
            <Page
                title="Home Page"
                subtitle="Basic scaffold"
                compactTitle
            >
                <Card title="Home Page" sectioned>
                    <p>Home Page</p>
                </Card>
            </Page>
        </div>
    )
}

export default Home