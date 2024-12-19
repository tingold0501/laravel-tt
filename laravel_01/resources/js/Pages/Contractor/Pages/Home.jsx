import React from 'react';
import TotalBalance from '@/Components/Contractor/TotalBalance';
import ColChartReport from '@/Components/Contractor/ColChartReport';
import Header from '@/Components/Contractor/Header';
const Home = () => {
    return (
        <div className="h-full">
            <div className='w-[95%] mx-auto'>
                <Header />
                <TotalBalance />
                <ColChartReport/>
            </div>
        </div>
    );
}
export default Home;
