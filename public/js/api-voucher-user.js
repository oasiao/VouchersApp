const apiMyVouchers = {
    myVouchers: function () {
        const vouchers = async () => {
            const url = '/api/api-myVouchers';
            let response = await fetch(url);
            return await response.json();
        }
        vouchers().then(data => {
            console.log(data);
        });
    },
    getVoucher: function () {
        let getVoucherButton = document.querySelectorAll('.create');
        getVoucherButton.forEach(button => {
            button.addEventListener("click", function () {
                if (window.confirm("Do you want to get this voucher?")){
                    let voucherId = button.getAttribute('voucher_code');
                    let userId = button.getAttribute('user_id');

                    let voucher = {
                        'user_id': userId,
                        'voucher_code': voucherId,
                        'redeemed': false
                    };

                    const createVoucher = async (voucher) => {
                        const url = `/api/api-myVouchers`;
                        const settings = {
                            method: 'POST',
                            body: JSON.stringify(voucher),
                            headers: {
                                'Content-Type': 'application/json'
                            }
                        };
                        await fetch(url, settings);
                    }

                    const vouchers = async () => {
                        const url = '/api/api-myVouchers';
                        let response = await fetch(url);
                        return await response.json();
                    }

                    let repeated = false;

                    vouchers().then(data => {
                        data.forEach( voucher => {
                            if (voucher.voucher_code === voucherId){
                                repeated = true;
                            }
                        });
                    }).then(()=>{
                        if(!repeated){
                            createVoucher(voucher).then(()=>{
                                location.replace('myVouchers');
                            });
                        }else{
                            alert('You already have this voucher!');
                        }
                    });
                }

            });
        });
    },
    useVoucher:function(){
        let useButton = document.querySelectorAll('.use');
        useButton.forEach(button =>{
            button.addEventListener("click", function(){
                if (window.confirm("Do you want to use this voucher?")){
                    let voucherId = button.getAttribute('voucher_id');
                    let voucher = {
                        'redeemed': true
                    }
                    const redeemed = async (voucher) => {
                        const url = `/api/api-myVouchers/${voucherId}`
                        const settings = {
                            method: 'PATCH',
                            body: JSON.stringify(voucher),
                            headers: {
                                'Content-Type': 'application/json'
                            },
                        };
                        await fetch(url, settings);
                    }
                    redeemed(voucher).then(()=>{
                        location.reload();
                    });
                }

            });
        });
    },
    renderButtons: function () {
        this.myVouchers();
        this.getVoucher();
        this.useVoucher();
    }
}

apiMyVouchers.renderButtons();



