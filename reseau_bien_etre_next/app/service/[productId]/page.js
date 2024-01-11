function ProductDetails({params}) {
  return (
    <main>
        <h1 className="text-2xl">Hello page service details {params.productId}</h1>
    </main>
  );
}
export default ProductDetails;