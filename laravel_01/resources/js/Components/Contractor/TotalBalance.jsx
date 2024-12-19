import React from 'react';
import { Link } from '@inertiajs/react';
const TotalBalance = () => {
    return (
        <nav class="navbar rounded-box flex w-full h-[100px] items-center justify-between gap-2 bg-[#025864] mt-5">
            <div class="navbar-start max-md:w-1/4">
                <a class="link text-base-content/90 link-neutral  font-semibold no-underline" href="#">
                    <h4 className='text-white text-sm mb-1'>Total Balance</h4>
                    <span className='text-white text-3xl'>17,000,000 VNĐ <span className='text-green-500 text-sm mt-1'>100%</span></span>
                </a>
            </div>

            <div class="navbar-end items-center gap-4">
                <button className='relative bg-[rgba(0,212,126,1)] w-[100px] h-[40px] rounded-md font-montserrat border-none text-white'>
                    <span className='relative z-10 text-black'>Add</span>
                </button>
                <button className='relative bg-[rgba(43,115,125,1)] w-[100px] h-[40px] rounded-md font-montserrat border-none text-white '>
                    <span className='relative z-999'>Send</span>
                </button>
                <button className='relative bg-[rgba(43,115,125,1)] w-[100px] h-[40px] rounded-md font-montserrat border-none text-white '>
                    <span className='relative z-999'>Request</span>
                </button>
                <button className='relative bg-[rgba(43,115,125,1)] w-[50px] h-[40px] rounded-md font-montserrat border-none text-white '>
                    <span className='relative z-999'>...</span>
                </button>
            </div>
        </nav>
    );
}
export default TotalBalance;
