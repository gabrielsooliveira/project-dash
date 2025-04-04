const Ziggy = {"url":"http:\/\/project-dash.test","port":null,"defaults":{},"routes":{"register":{"uri":"auth\/register","methods":["GET","HEAD"]},"register_store":{"uri":"auth\/register","methods":["POST"]},"login":{"uri":"auth\/login","methods":["GET","HEAD"]},"login_store":{"uri":"auth\/login","methods":["POST"]},"logout":{"uri":"logout","methods":["POST"]},"dashboard":{"uri":"dashboard","methods":["GET","HEAD"]},"group_index":{"uri":"group","methods":["GET","HEAD"]},"group_show":{"uri":"group\/show","methods":["GET","HEAD"]},"home":{"uri":"\/","methods":["GET","HEAD"]},"storage.local":{"uri":"storage\/{path}","methods":["GET","HEAD"],"wheres":{"path":".*"},"parameters":["path"]}}};
if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
  Object.assign(Ziggy.routes, window.Ziggy.routes);
}
export { Ziggy };
