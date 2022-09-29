    const senha = document.querySelector('.senha');
	const btn = document.querySelector('.btn');
    const btn2 = document.querySelector('.btn2');
    const senha2 = document.querySelector('.senha2');

    


	btn.onclick = () =>
	{
		if (senha.type === 'password') 
		{
			senha.type = 'text'
			btn.src = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8SA14-A-zoRaiJ2GdUiESsisaFiHNYrUZtjtjZqnth0D_KdfkwzQWIdCjbzhAoYKPTvs&usqp=CAU'
		}
		else
		{
			senha.type = 'password'
			btn.src = 'https://icon-library.com/images/icon-eyes/icon-eyes-12.jpg'
		}
	}
    btn2.onclick = () =>
	{
		if (senha2.type === 'password') 
		{
			senha2.type = 'text'
			btn2.src = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8SA14-A-zoRaiJ2GdUiESsisaFiHNYrUZtjtjZqnth0D_KdfkwzQWIdCjbzhAoYKPTvs&usqp=CAU'
		}
		else
		{
			senha2.type = 'password'
			btn2.src = 'https://icon-library.com/images/icon-eyes/icon-eyes-12.jpg'
		}
	}

   