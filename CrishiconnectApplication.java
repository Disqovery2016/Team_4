package com.marvelapp.project1002789;

import org.appcelerator.kroll.KrollRuntime;
import org.appcelerator.kroll.runtime.v8.V8Runtime;
import org.appcelerator.titanium.TiApplication;
import org.appcelerator.titanium.TiRootActivity;
import org.appcelerator.titanium.TiVerify;

public final class CrishiconnectApplication extends TiApplication {
    private static final String TAG = "CrishiconnectApplication";

    public void onCreate() {
        super.onCreate();
        this.appInfo = new CrishiconnectAppInfo(this);
        postAppInfo();
        KrollRuntime.init(this, new V8Runtime());
        this.stylesheet = new ApplicationStylesheet();
        postOnCreate();
    }

    public void verifyCustomModules(TiRootActivity tiRootActivity) {
        new TiVerify(tiRootActivity, this).verify();
    }
}
