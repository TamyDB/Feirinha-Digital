<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Summary</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center p-8">
  <div class="bg-white w-80 p-5 border border-gray-300">
    <!-- Título -->
    <h3 class="text-sm font-bold">SUMMARY</h3>
    <div class="border-b border-black my-2"></div>

    <!-- Cupom -->
    <p class="text-sm">Do you have a promo code?</p>
    <div class="flex mt-2 mb-4">
      <input type="text" class="flex-1 border border-gray-300 p-2 text-sm" />
      <button class="bg-black text-white px-4 text-sm">APPLY</button>
    </div>

    <div class="border-b border-black my-2"></div>

    <!-- Valores -->
    <div class="flex justify-between text-sm my-1">
      <span class="font-bold">SUBTOTAL</span>
      <span>$1,090.50</span>
    </div>
    <div class="flex justify-between text-sm my-1">
      <span>Shipping</span>
      <span>TBD</span>
    </div>
    <div class="flex justify-between text-sm my-1">
      <span>Sales Tax <span class="italic">(i)</span></span>
      <span>TBD</span>
    </div>

    <div class="border-b border-black my-2"></div>

    <div class="flex justify-between text-sm my-2">
      <span class="font-bold">ESTIMATED TOTAL</span>
      <span class="font-bold">$1,090.50</span>
    </div>

    <div class="border-b border-black my-2"></div>

    <!-- Botão Checkout -->
    <button class="w-full bg-black text-white py-2 font-bold mt-2">CHECKOUT</button>

    <!-- Ajuda -->
    <p class="text-xs text-gray-500 text-center mt-4">
      Need help? Call us at 1-877-707-6272
    </p>
  </div>
</body>
</html>
