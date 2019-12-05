type t =
  | Php
  | Js

let backend_extensions = ["php"; "js"]

let backends = [Php; Js]

let to_string t =
  List.assoc t (List.combine backends backend_extensions)

let from_string s =
  match List.assoc_opt s (List.combine backend_extensions backends) with
  | Some backend -> backend
  | None -> raise (Invalid_argument (s ^ " is not a valid backend"))

let extension = to_string
