import React from 'react';
import TotalBalance from '@/Components/Contractor/TotalBalance';
import ColChartReport from '@/Components/Contractor/ColChartReport';
const Home = () => {
    return (
        <div className="h-full">
            <div className='w-[95%] mx-auto'>
                <TotalBalance />
                <ColChartReport />
            </div>
        </div>
    );
}

export default Home;
