import store from "@/store";

export default (to, from, next) => {
  if (store.getters.isLoggedIn) {
    next({ name: "home" });
    return;
  }
  next();
}