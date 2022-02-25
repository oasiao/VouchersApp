const apiVouchers = {
    allVouchers: function () {
        const vouchers = async () => {
            const url = '/api/api-vouchers';
            let response = await fetch(url);
            return await response.json();
        }

        vouchers().then(data => {
            console.log(data);
        });
    }
}
if (location.pathname === '/vouchers'){
    apiVouchers.allVouchers();
}
