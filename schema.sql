category
id	increments
title	string
description
isactive	boolean
isdelete	boolean


product
id	increments
title	string
description
price	integer
weight	integer	unsigned


productpictures
productid	integer
caption	string
filepath	string
order	integer


inquiry
productid	integer
name	string
phone	string
email	string
description


page
id	increments
title	string
description
slug	string
