$(document).ready(function() {
	$('#datatable').DataTable(),
		$('#datatable-buttons')
			.DataTable({
				lengthChange: !1,
				buttons: [
					'copy',
					'excel',
					{
						extend: 'pdfHtml5',
						customize: function(doc) {
							doc.content.splice(0, 0, {
								margin: [ 0, 0, 0, 12 ],
								alignment: 'center',
								image:
									'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBUODAsLDBkSEw8VHhsgHx4bHR0hJTApISMtJB0dKjkqLTEzNjY2ICg7Pzo0PjA1NjP/2wBDAQkJCQwLDBgODhgzIh0iMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzMzP/wAARCABJACUDASIAAhEBAxEB/8QAGgAAAgMBAQAAAAAAAAAAAAAABAUABgcDAv/EADMQAAIBAwMCBAMHBAMAAAAAAAECAwAEEQUSITFBBhNRcSKBwRQVIzIzYZEHNDWxcnPR/8QAGQEAAwEBAQAAAAAAAAAAAAAAAgMEAQAF/8QAJBEAAgMAAQIGAwAAAAAAAAAAAAECAxEhBBITFDFBUmFCcaH/2gAMAwEAAhEDEQA/ANEk0Sw1l2mh0qGZW/DNyXMKuAMZBXluvXGOOtV9pbi28IkHH3l4dv8AzNueqA/EPYgmg7bxJarbxwGW7jjRQqgo2AOw4NBm/wBPOsSMLgNb3ce2QsCNp6EnI9qmdzfsV+VcVy/4zSJL97gQzWt3bmOcKwLdQDg4z2oR7SWfU5p7gRPHHkxoADv6ZGPbOPeqLbauUto7KN22xrhtzbU2jgEE8c9qOhuGjMrRshfJIZJAccdua6PUyf4gLpk/cU/1DkMUunSPBJI0iyHG4FlGRjJPX1+dSgPEbXMstrbmZ2eGPnzFJ4J9f5qVjsTe4EoOPGlz+54SmPLXp6UHPZ6dZ3USzQxszcqHPGasp2qm7IPHGOapniITS63ZlUIVHYnv0GB/s0N77YcHoWTfbg2nW0Tz2urdZIpFwwOAAB+9IJtI043DJAQQCD8QwQpGR78elEXUtzcWskCI7vMhQKgySSMU20u0lgtEti0Us8KrHKwbIBwenqRzU9D2WMTXJx9CqXeksrAwzlc8Efwe/ualXYWc6kgyk/ueflUqrsDa1+giiureabbDdAtjI+I8jpn6UPd39vFfWSvvkePzVcJkkE4YEnpyAe/Y1ms13qNowZbiVCJGyA20bMjjntVwk1VJdPtbUBZH3efFKOW4Ujn5EikX0+F+iWrqnfHHmjSw1N9Zut2ny3EMRba26MKcLzkHPc8VwsNQm0+9S/gl/AuSVkV2yFb6eo+dA+Er6R5khkQKIHaNT1yCM/7NLbW4a9kmj+GGSUGQJjAJB5zz3roRxv6CU8xmjffk46xRnnrjg+3NSs2k8QS2rfZ5ILmYR8KwlwMegBHapVCqs+Rj66PxEa3FxuCrcOoK7idx7k+tWTSLZ3t5XmkZpVTOeB1P/lPYvA1jGysZpmwu07uAR8icUbDoKwWvkpKqlzhpDjeQD05HpR32qUciyKihqWyQq0nTo4Xgmhd4pJQjSFQPzspJ7egWkkK+TqoMZRWEm0Pj37U/8PTLqkrSWglU2+z4HQNuULt7HrxXvU9H1L7QZLSZVtwPjheEgkcn4cDjHT+aFzSslv0bGpuMX9sqd3FGbgu5fLDovTqalFXOm3bzE+Q4GBjcpHapT/GS4FrpZyWo1JrZbeASJFc3DHjYVGffivZhWWx85IZUcoxCdzx6HnP7Uwj/AFoveujfrD/sNRxSLZcGXeAbS42XMElu0bMQJHk4KsB+XB5B5zV5Fo1rIykZiIyHjwMnvxXW8/yd17P9K7x/26e/1orOdZlS3EcntpVxgtgjIwufrUpna/pH/kalK0Y0f//Z'
							});
						}
					},
					'colvis'
				]
			})
			.buttons()
			.container()
			.appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
});
