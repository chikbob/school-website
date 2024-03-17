import {BaseModel} from "../models/base.model.js";
import {useStore} from "pinia-class-store";


class PostModel extends BaseModel {
    init(post) {
        this.post = post;
    }

    constructor() {
        super();
        this.post = undefined;
    }
}

export const postModel = useStore.bind(undefined, PostModel);
